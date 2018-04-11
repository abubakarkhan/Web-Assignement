function myFunction() {
                var phoneInput = document.getElementById("phone").value;
                var str = phoneInput.replace(/(?![\d|x|\(|\)|\+|\s])./g,"");
                document.getElementById("phone").value = str;
            }
            function checkNANP() {
                var patt = /\+1\s?\(?[2-9]\d{2}\)?\s?[2-9]\d{2}\s?\d{4}\s?(x\d{1,5})?$/;
                var phoneInput = document.getElementById("phone").value;
                if (patt.test(phoneInput))
                    document.getElementById("NANP").style.display = "inline";
                else
                    document.getElementById("NANP").style.display = "none";
            }

            function toggleCheckbox(){
                if(document.getElementById("checkBox").checked){
                    localStorage.name = document.getElementById('name').value;
                    console.log(document.getElementById('name').value);
                    localStorage.email = document.getElementById('email').value;
                    console.log(document.getElementById('email').value);
                    localStorage.phone = document.getElementById('phone').value;
                    console.log(document.getElementById('phone').value);
                    localStorage.address = document.getElementById('address').value;
                    console.log(document.getElementById('address').value);
                    console.log("Stored");
                }
                else {
                    localStorage.clear();
                    console.log("Cleared");
                    console.log(localStorage.name);
                    console.log(localStorage.email);
                    console.log(localStorage.phone);
                    console.log(localStorage.address);
                }
            }

            window.onload = SetDefaultValue;

            function SetDefaultValue(){
                var name = localStorage.name;
                var email = localStorage.email;
                var phone = localStorage.phone;
                var address = localStorage.address;

                if (name !== null && name !== undefined){
                    document.getElementById("name").value= name;
                }
                if (email !== null && email !== undefined){
                    document.getElementById("email").value= email;
                }
                if (phone !== null && phone !== undefined){
                    document.getElementById("phone").value= phone;
                }
                if (address !== null && address !== undefined){
                    document.getElementById("address").value= address;
                }
            }