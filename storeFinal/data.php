<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>
<body onload="fetch()">

<section class="corona update container-fluid">
    <div class="mb-3" id="updates">
        <h3 class="text-center">CoVid-19 Updates</h3>
    </div>
    <center><div class="table-responsive">
    
        <table class="table-bordered table-striped text-center" id="tbval" > 
            <tr style="margin:2%; padding:4%;">
                <th style="   width:200px;">Country</th>
                <th  style="  width:200px;">Total Cases</th>
                <th  style="  width:200px;">Total recovered</th>
                <th  style="  width:200px;">Total Deaths</th>
                <th  style="  width:200px;">Cases yesterday</th>
                <th  style="  width:200px;">Recovered Yesterday</th>
                <th  style="  width:200px;">Deaths Yesterday</th> 
            </tr>
            
        </table>

    </div></center>
</section>

<script>
    function fetch(){
        $.get("https://api.covid19api.com/summary" ,

            function(data){
                var tbval= document.getElementById('tbval');
                /*var x= tbval.insertRow();
                x.insertCell(0);
                tbval.rows[1].cells[0].innerHTML= data['Countries'][76]['Country'];
                
                x.insertCell(1);
                tbval.rows[1].cells[1].innerHTML= data['Countries'][76]['TotalConfirmed'];
                
                x.insertCell(2)
                tbval.rows[1].cells[2].innerHTML= data['Countries'][76]['TotalRecovered'];
                
                x.insertCell(3)
                tbval.rows[1].cells[3].innerHTML= data['Countries'][76]['TotalDeaths'];
                
                x.insertCell(4)
                tbval.rows[1].cells[4].innerHTML= data['Countries'][76]['NewConfirmed'];
                
                x.insertCell(5)
                tbval.rows[1].cells[5].innerHTML= data['Countries'][76]['NewRecovered'];
                
                x.insertCell(6)
                tbval.rows[1].cells[6].innerHTML= data['Countries'][76]['NewDeaths'];
                */
                
                for(var i=1; i< (data['Countries'].length); i++){
                    var x= tbval.insertRow();
                    x.insertCell(0);

                    tbval.rows[i].cells[0].innerHTML= data['Countries'][i-1]['Country'];
                    tbval.rows[i].cells[0].style.background= '#7a4a91';
                    tbval.rows[i].cells[0].style.color= 'white';



                    x.insertCell(1);
                    tbval.rows[i].cells[1].innerHTML= data['Countries'][i-1]['TotalConfirmed'];
                    tbval.rows[i].cells[1].style.background= '#4bb7d8';
                    
                    x.insertCell(2);
                    tbval.rows[i].cells[2].innerHTML= data['Countries'][i-1]['TotalRecovered'];
                    tbval.rows[i].cells[2].style.background= '#9cc850';

                    x.insertCell(3);
                    tbval.rows[i].cells[3].innerHTML= data['Countries'][i-1]['TotalDeaths'];
                    tbval.rows[i].cells[3].style.background= '#f36e23';
                    
                    x.insertCell(4);
                    tbval.rows[i].cells[4].innerHTML= data['Countries'][i-1]['NewConfirmed'];
                    tbval.rows[i].cells[4].style.background= '#4bb7d8';
                    
                    x.insertCell(5);
                    tbval.rows[i].cells[5].innerHTML= data['Countries'][i-1]['NewRecovered'];
                    tbval.rows[i].cells[5].style.background= '#9cc850';
                    
                    x.insertCell(6);
                    tbval.rows[i].cells[6].innerHTML= data['Countries'][i-1]['NewDeaths'];
                    tbval.rows[i].cells[6].style.background= '#f36e23';
                    
                    
                }
            }
        
        
        )
    }
</script>

</body>
</html>