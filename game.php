
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Number Guessing Game</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>

<body>

       <p> <img src="no2.png" class="center" ></p>

 

    <p>NOTE : Enter number between 1 to 100 inclusive</p>



    <div class="form">
        <label for="field">Your Guess is--> </label><input type="number" id="field" class="field" style="font-size:16pt;">
        <input type="submit" value="Submit guess" class="submit">
    </div>

    <div class="final">
        <p class="guesses"></p>
        <p class="result"></p>
        <p class="prev"></p>
    </div>

    <script>
        let randomNumber = Math.floor(Math.random() * 100) + 1;
        let guessCount = 10;
        let resetButton;

        const guesses = document.querySelector('.guesses');
        const result = document.querySelector('.result');
        const prev = document.querySelector('.prev');
        const submit = document.querySelector('.submit');
        const field = document.querySelector('.field');


        function Check() {
            let userGuess = Number(field.value);
            if (guessCount === 10) {
                guesses.textContent = 'Previous guesses: ';
            }

            guesses.textContent += userGuess + ' ';

            if (userGuess === randomNumber) {
                result.textContent = 'Well done Boiii...';
            
                prev.textContent = '';
                end();
            }
            else if (guessCount === 1) {
                result.textContent = 'Done u are trash...';
                prev.textContent = '';
                end();
            } else {
                result.textContent = 'Wrong!';
                
                if (userGuess < randomNumber) {
                    prev.textContent = 'Too Low';
                } else if (userGuess > randomNumber) {
                    prev.textContent = 'Too High';
                }
            }

            guessCount--;
            field.value = '';
            field.focus();
        }

        submit.addEventListener('click', Check);

        function end() {
            field.disabled = true;
            submit.disabled = true;
            resetButton = document.createElement('button');
            resetButton.textContent = 'Play Again!!!';
            document.body.appendChild(resetButton);
            resetButton.addEventListener('click', start);
        }

        function start() {
            guessCount = 1;
            const re = document.querySelectorAll('.final p');
            for (let i = 0; i < re.length; i++) {
                re[i].textContent = '';
            }

            resetButton.parentNode.removeChild(resetButton);
            field.disabled = false;
            submit.disabled = false;
            field.value = '';
            field.focus();
           
            randomNumber = Math.floor(Math.random() * 100) + 1;
        }
    </script>
</body>

</html>
