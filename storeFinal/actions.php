
<script>
function validate(){
    var validate=false;
    var name= document.getElementById('sname').value;
    var aadhar= document.getElementById('aadhar').value;
    var email= document.getElementById('email').value;
    var pnumber= document.getElementById('pnumber').value;
    var address= document.getElementById('address').value;
    var ns= "your data insertion was not successful"
    var nameregex=   /^[a-zA-Z ]*$/;
    var aadharregex=  /^[0–9]{12}$/;
    var emailregex= ; /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    var phoneregex=  /^[0–9]{10}$/;
    var addressregex= /^\d+\s[A-z]+\s[A-z]+/;

    var nameResult = nameregex.test(name);
    var aadharResult = aadharregex.test(aadhar);
    var emailResult= emailregex.test(email);
    var pnumberResult = phoneregex.test(pnumber);
    var addressResult = addressregex.test(address);
    if(nameResult=="false"){
            alert('enter a valid store name');
            return validate;
            return ns;
    }
    else if(aadharResult==false){
            alert('enter a valid aadhar number');
            return validate;
            return ns;
    }
    else if(emailResult==false){
            alert('email id is not valid');
            return validate;
            return ns;
    }
    else if(pnumberResult==false || pnumber.length!=10){
            alert('enter a valid phone numebr');
            return validate;
            return ns;
    }
    else if(addressResult==false){
            alert('enter a valid address');
            return validate;
            return ns;
    }
   
    else{
        validate= true;
        <?php 
        include "config.php"; 
        $name=$_POST['sname'];
        $aadhar=$_POST['aadhar'];
        $pnumber=$_POST['pnumber'];
        $address=$_POST['address'];
        $email=$_POST['email'];
    
        $insert = "INSERT INTO store(name,aadhar,email,phone,address) VALUES ('$name','$aadhar','$email','$pnumber','$address')";
        if($conn-> query($insert)===TRUE){
            echo 'insert successful';
        }
        else{
            echo'insert unsuccessful';
        }
        
       
       ?>
    }
    
  

    




</script>
