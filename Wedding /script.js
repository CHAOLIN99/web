// Your code goes here
// Get a reference to the UI element
const button = document.querySelector('#myButton');

// Add an event listener to the button
button.addEventListener('click', () => {
    // Perform some action when the button is clicked
    console.log('Button clicked!');
});

// Update the UI element dynamically
const myElement = document.querySelector('#myElement');
myElement.textContent = 'Hello, world!';
