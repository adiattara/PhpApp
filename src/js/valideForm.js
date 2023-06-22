
function isEmptyField(field){

    valuefield=field.value
    if(valuefield=="" || valuefield==null || valuefield.length==0){
        return false ;
    }
    else{
        return true;
    }

}

function verifLegnthField(field){

        valuefield=field.value
        if(valuefield.length<3 || valuefield.length>25){
            return false 
        }
        return true;
}

function isMailValide(email){
    valueMail=email.value
    let regex = new RegExp('[a-zA-Z0-9]+@[a-z]+\.[a-z]{2,3}');
    return regex.test(valueMail)
}

function valideForm(form) {

    firts_name=form.first_name;
    second_namme=form.second_namer;
    birthday_user=form.birthday;
    email_user=form.password_field;
    password_1=form.password_field;
    password_2=form.password_verrification;

    valideform=True;
    if(isEmptyField(first_name)!=true || isEmptyField(second_namer)!=true ||isEmptyField(birthday_user)!=true || isEmptyField(email_user) || isEmptyField(password_1)!=true|| isEmptyField(password_2)!=true){
        
        valideForm=false;
        alert("un des champs du formulaire est vide please vérifier!");
    }
    
    
    
}