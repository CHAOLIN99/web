var MyModule = (function() {
  // Private variables and functions
  var privateVariable = 'Private data';

  function privateFunction() {
    console.log('This is a private function');
  }

  // Public interface
  return {
    // Public variables and functions
    publicVariable: 'Public data',

    publicFunction: function() {
      console.log('This is a public function');
    },

    // Accessing private members
    getPrivateVariable: function() {
      return privateVariable;
    },

    setPrivateVariable: function(value) {
      privateVariable = value;
    }
  };
})();

// Usage
console.log(MyModule.publicVariable);  // Output: 'Public data'
MyModule.publicFunction();  // Output: 'This is a public function'

console.log(MyModule.getPrivateVariable());  // Output: 'Private data'
MyModule.setPrivateVariable('New private data');
console.log(MyModule.getPrivateVariable());  // Output: 'New private data'

function redirectToPage() {
      window.location.href = 'place3.html';
    }

function redirectToPage0() {
      window.location.href = 'place1.html';
    }

function redirectToPage1() {
      window.location.href = 'place2.html';
    }

function redirectToPage2() {
      window.location.href = 'index.html';
    }


