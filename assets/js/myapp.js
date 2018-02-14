             function cityname() {
               var did =  document.getElementById('division').value;
               var xhr = new XMLHttpRequest();
              var city =  document.getElementById('city');
               xhr.onload = function() {
                  if (this.status == 200 ) {
                       city.innerHTML = this.responseText;
                  }
               }
                xhr.open("GET","ajax/city.php?d_id="+did, true);
               xhr.send();
             
            }