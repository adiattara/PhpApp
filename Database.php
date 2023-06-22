<?php


class Database
{
    private PDO $pdo;
    
    public function __construct(string $path)
    {
        $this->pdo = new PDO($path);
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->createTable();
    }

    private function createTable(): void{
        
            $this->pdo->query('CREATE TABLE IF NOT EXISTS recette (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            name_recipe VARCHAR(100) NOT NULL,
            fileToUpload BLOB NOT NULL,
            temps_cuisson  VARCHAR(100) NOT NULL,
            niveau_de_difficulte VARCHAR(100) NOT NULL,
            prix_de_revenu VARCHAR(100) NOT NULL,
            ingredient VARCHAR(100) NOT NULL,
            descript VARCHAR(5000) NOT NULL
            )');
    }

    /**
     * @return PDO
     */
    public function getPdo(): PDO
    {
        return $this->pdo;
    }

    /**
     * @return array
     */
    public function getMeals(): array
    {
        return $this->pdo
                    ->query('SELECT * FROM recette')
                    ->fetchAll();
    }

    public function insertRecette(
        
        string $name_recipe ,
        string $fileToUpload,
        string $temps_cuisson,
        string $niveau_de_difficulte,
        string $prix_de_revenu,
        string $ingredient,
        string $descript 

    ):void{
        if (
            $this->checkname_recipe($name_recipe) &&
            $this->checkfileToUpload($fileToUpload) &&
            $this->checktemps_cuisson($temps_cuisson)&&
            $this->checkniveau_de_difficulte($niveau_de_difficulte)&&
            $this->checkprix_de_revenu($prix_de_revenu)&&
            $this->checkingredient($ingredient)&&
            $this->checkDescript($descript)
            
        ){ 
            $statement = $this->pdo->prepare('
                    INSERT INTO recette (name_recipe,fileToUpload,temps_cuisson,niveau_de_difficulte,prix_de_revenu,ingredient,descript) 
                    values ( :name_recipe, :fileToUpload, :temps_cuisson,:niveau_de_difficulte ,:prix_de_revenu,:ingredient, :descript)');
            $statement->bindValue(':name_recipe',$name_recipe,PDO::PARAM_STR);
            $statement->bindValue(':fileToUpload',$fileToUpload,PDO::PARAM_STR);
            $statement->bindValue(':temps_cuisson',$temps_cuisson,PDO::PARAM_STR);
            $statement->bindValue(':niveau_de_difficulte',$niveau_de_difficulte,PDO::PARAM_STR);
            $statement->bindValue(':prix_de_revenu',$prix_de_revenu,PDO::PARAM_STR);
            $statement->bindValue(':ingredient',$ingredient,PDO::PARAM_STR);
            $statement->bindValue(':descript',$descript,PDO::PARAM_STR);
            $statement->execute();


        }
        else {
            var_dump("un Champ n'est pas bien  rempli ... :( !!!");
        }

    }
    
    
    private function checkname_recipe(String $name_recipe): bool{
        return $name_recipe !== '' && strlen($name_recipe) <= 100;
    }

    private function checkfileToUpload(String $fileToUpload): bool{
        return $fileToUpload !== '' && strlen($fileToUpload) <= 100;
    }
    private function checktemps_cuisson(String $temps_cuisson): bool{
        return $temps_cuisson !== '' && strlen($temps_cuisson) <= 100;
    }
    private function checkniveau_de_difficulte(String $niveau_de_difficulte): bool{
        return $niveau_de_difficulte !== '' && strlen($niveau_de_difficulte) <= 100;
    }
    private  function checkprix_de_revenu(String $prix_de_revenu): bool{
        return $prix_de_revenu !== '' && strlen($prix_de_revenu) <= 5000;
    }
     private function checkingredient(String $ingredient): bool{
        return $ingredient !== '' && strlen($ingredient) <= 5000;
    }
    private function checkDescript(String $descript): bool{
        return $descript !== '' && strlen($descript) <= 5000;
    }


}