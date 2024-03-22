    // Function to handle speech synthesis


function speak(text) {
    const utterance = new SpeechSynthesisUtterance(text);
    speechSynthesis.speak(utterance);
  }


      // Event listener for the speak button
    //   document.getElementById('speak-btn').addEventListener('click', function() {
        
    // const textToRead = document.getElementById('text-to-read').value;
    //     if (textToRead !== '') {
    //       speak(textToRead);
    //     } else {
    //       alert('Please enter some text to speak.');
    //     }
    
    
        //   }
      
    //   );