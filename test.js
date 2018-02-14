   
                
              
                function pobj(name,jobtitle,phone)
                {
                    this.name = name;
                    this.jobtitle = jobtitle;
                    this.phone = phone;
                }

                function getValue(callback)
                {
                   
                    var xhr = new XMLHttpRequest();
                    xhr.onload = function(){
                        if(this.readyState === 4 && this.status === 200)
                        {
                            var data = JSON.parse(this.response);
                           callback(new pobj(data.name,data.email,data.phone));
                            //console.log(JSON.parse(this.response));
                        }
                    }
                    xhr.onerror = function(){
                        console.log(new Error("some error happened"));
                    }
                    xhr.open("GET","https://jsonplaceholder.typicode.com/users",true);
                    xhr.send();
                }

                getValue(function(obj){
                  console.log("callbacked executed "+obj);
                });