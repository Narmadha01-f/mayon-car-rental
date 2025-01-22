        
        const loginSection = document.querySelector('.login');
        const registerSection = document.querySelector('.register');
        const registerLink = document.getElementById('registerLink');
        const loginLink = document.getElementById('loginLink');
        
        registerLink.addEventListener('click', () => {
            loginSection.style.display = 'none';
            registerSection.style.display = 'block';
        });
        
        loginLink.addEventListener('click', () => {
            registerSection.style.display = 'none';
            loginSection.style.display = 'block';
        });
        
        
        
        // Handle Login button click
        document.getElementById('btn1').addEventListener('click', () => {
            const email = document.getElementById('mailid1').value;
            const password = document.getElementById('pass1').value;

            email.innerText=email.value

            if (email && password) {
                alert(`Login Successful!\nEmail: ${email}`);
            } else {
                alert('Please enter both email and password!');
            }
        });

        // Handle Register button click
        document.getElementById('btn2').addEventListener('click', () => {
            const fullname = document.getElementById('fname').value;
            const email = document.getElementById('mailid2').value;
            const password = document.getElementById('pass2').value;

            if (fullname && email && password) {
                alert(`Registration Successful!\nName: ${fullname}\nEmail: ${email}`);
            } else {
                alert('Please fill in all fields!');
            }
        });