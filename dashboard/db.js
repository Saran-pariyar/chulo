    
    
// REAL ONE 
/*
    // Function to handle speech synthesis


function speak(text) {
    const utterance = new SpeechSynthesisUtterance(text);
    speechSynthesis.speak(utterance);
  }

*/
 //NOT FOR REAL SUE 
  //  ONE OF VOICE
  // Function to handle speech synthesis
function speak(text, voiceName) {
    const utterance = new SpeechSynthesisUtterance(text);

    // Get all available voices
    const voices = window.speechSynthesis.getVoices();

    // Find the voice by name
    const selectedVoice = voices.find(voice => voice.name === voiceName);

    // Set the selected voice
    utterance.voice = selectedVoice;

    // Speak the text
    speechSynthesis.speak(utterance);
}

// Example usage
const text = "Hello, how are you?";
speak(text, voiceName);