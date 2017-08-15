<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Javascript Class</title>
  </head>
  <body>
    <h1>Javascript Class</h1>

    <h3>Big Word Alerts</h3>
    <p><strong>Syntax Parser:</strong></p>
    <p>A program that reads your code and determines what it does and if its grammer is valid</p>
    <p><strong>Lexical Enviroment:</strong></p>
    <p>Where something sits physically in the code you write.</p>
    <p><strong>Execution Context:</strong></p>
    <p>A wrapper to help manage the code that is running.</p>
    <p><strong>Name/Value Pair:</strong></p>
    <p>A name which maps to a unique value</p>
    <p><strong>Object:</strong></p>
    <p>A collection of name value pairs</p>
    <p><strong>Single Threaded:</strong></p>
    <p>One command at a time</p>
    <p><strong>Synchronous:</strong></p>
    <p>One at a time, and in order</p>
    <p><strong>Invocation:</strong></p>
    <p>Running a function... by using parenthesis()</p>
    <p><strong>Variable Environment:</strong></p>
    <p>Where the variables live... and how they relate to each other in memory</p>
    <p><strong>Scope:</strong></p>
    <p>Where a avariable is available in your code... and if it's truly the same variable, or a new copy</p>
    <p><strong>The Scope Chain Example:</strong></p>
    <p></p>
    <pre>
      <code>
        function b() {
          console.log(myVar);
        }

        function a() {
          var myVar = 2;
          b();
        }

        var myVar = 1;
        a();
      </code>
    </pre>
    <p><strong>Asynchronous:</strong></p>
    <p>More than one at a time</p>
    <p><strong>Dynamic Typing:</strong></p>
    <p>You don't tell the engine what type of data a variable holds, it figures it out while your code is running...
    variables can hold different types of values because it's all figured out during execution</p>
    <pre>
      <strong>Dynamic Typing Example</strong>
      <code>
        var isNew = true; // no errors
        isNew = 'yup!';
        isNew = 1;
      </code>
    </pre>
    <p><strong>Primitive Type:</strong></p>
    <p>A type of data that represents a single value... that is, not an object</p>
    <ul>
      <li>UNDEFINED - Represents lack of existence (you shouldn't set a variable to this)</li>
      <li>NULL - Represents lack of existence (you can set a variable to this)</li>
      <li>BOOLEAN - True of False</li>
      <li>NUMBER - Floating point number (there's always some decimals). Unlike other programming languages, there's only one 'number' type... and it can make math weird</li>
      <li>STRING - A sequence of characters (both ' ' and " " can be used)</li>
      <li>SYMBOL - New. Used in ES6 (the next version of Javascript)</li>
    </ul>
    <p><strong>Operator:</strong></p>
    <p>A special function that is synthactically (written) differently</p>
    <p><strong>Operator Precedence:</strong></p>
    <p>Which operator function gets called first... functions are called in order of precedence(HIGHER precedence wins)</p>
    <p><strong>Associativity:</strong></p>
    <p>What order operator functions get called in: Left-to-right or right-to-left... when functions have the SAME precedence</p>
    <p><strong>Coercion:</strong></p>
    <p>Converting a value from on type to another... this happens quite often in Javascript because it's dynamicall typed</p>
    <pre>
      <code>
        var a = 1 + '2';
        console.log(a);

        output is 12
      </code>
    </pre>
    <h3>Comparison Operators</h3>
    <p><strong>Operators and the Dot:</strong></p>
    <pre>
      <code>
        var person = new Object(); // Not the correct way to create an Object

        person["firstname"] = "Tony";
        person["lastname"] = "Anderson";

        var firstNameProperty = "firstname";

        console.log(person); // Throws out Object and it's properties
        console.log(person[firstNameProperty]); // Shows "Tony"
        // more comman method
        console.log(person.firstname);
        console.log(person.lastname);

        person.address = new Object();
        person.address.street = "111 Main St.";
        person.address.city = "New York";
        person.address.state = "NY";

        console.log(person.address.street);
        console.log(person.address.city);
        console.log(person["address"]["state"]); // same as above, just different syntax
      </code>
    </pre>
    <h3>Object Literals Syntax</h3>
    <pre>
      <code>
        var Tony = {
          firstname: 'Tony',
          lastname: 'Jackson',
          address: {
            street: '111 Main St.',
            city: "New York",
            state: 'NY'
          }
        }; // same as creating new object... prefered way

        function greet(person) {
          console.log('Hi ' + person.firstname);
        }

        greet(Tony);

        greet({
          firstname: "Mary",
          lastname: "Doe"
        });

        Tony.address2 = {
          street: "333 Second St."
        }
      </code>
    </pre>
    <p><strong>Namespace:</strong></p>
    <p>A container for variables and functions... typicall to keep variables and functions with the same name seperate</p>
    <h3>Example</h3>
    <pre>
      <code>
        var greet = 'Hello!';
        var greet = 'Hola!';

        console.log(greet);

        var english = {
          greetings: {
            basic: 'Hello!'
          }
        };
        var spanish = {};

        // prevent namespace collisions
        spanish.greet = 'Hola!';

        console.log(english);
        console.log(spanish);
      </code>
    </pre>
    <h3>JSON and Object Literals</h3>
    <p><strong>JavaScript Object Notation - JSON</strong></p>
    var objectLiteral = {
      firstname: 'Sam',
      isAProgrammer: true
    }

    console.log(JSON.stringify(objectLiteral));

    var jsonValue = JSON.parse('{ "firstname": "Sam", "isAProgrammer": true }');

    console.log(jsonValue);
    <p><strong>First Class Functions:</strong></p>
    <p>Everything you can do with other types you can do with function... Assign them to variables, pass them around, create them on the fly</p>
    <h3>Property Attached to a function</h3>
    <h4>Example</h4>
    <h4>Functions are objects</h4>
    <pre>
      <code>
        function greet() {
          console.log('hi');
        }

        greet.language = 'english';
        console.log(greet.language); // without dot notation "languge" it would print entire function
      </code>
    </pre>
    <h1>Function Statements and Function Expressions</h1>
    <p><strong>Expression:</strong></p>
    <p>A unit of code that results in a value... it doesn't have to save to a variable</p>
    <pre>
      <code>
        greet(); // because it's hoiusted it can run before functions

        function greet() { // function statement
          console.log('hi');
        }

        // function statement
        var anonymousGreet = function() { // creating an object on the fly
          // this is an anonymous function because it isn't given a name before ()
          console.log('hi');
        }
        anonymousGreet(); // invoke the function


        // function statement passing function as a peramiter
        function log(a) {
          a();
        }

        log(function() {
          console.log('hi');
        });
      </code>
    </pre>
    <h1>Conceptural Aside - By Value VS By Reference</h1>
    <p><strong>Mutate:</strong></p>
    <p>To change something... <b>"Immutable"</b> means it <b>can't be changed</b></p>
    <pre>
      <code>
        // by value (primitives)
        var a = 3;
        var b;

        b = a;
        a = 2;

        console.log(a);
        console.log(b)

        // by reference (all objects (including functions))
        var c = { greeting: 'hi' };
        var d;

        d = c;
        c.greeting = 'hello'; // mutate

        console.log(c);
        console.log(d);

        // by reference (even as parameters)
        function changeGreeting(obj) {
          obj.greeting = 'Hola'; // mutate
        }

        changeGreeting(d);
        console.log(c);
        console.log(d);

        // equals operator sets up new memory space (new address)
        c = { greeting: 'howdy' };
        console.log(c);
        console.log(d);
      </code>
    </pre>
    <h1>Objects, Functions, AND 'this'</h1>
    <pre>
      <code>
        function a() {
            console.log(this);
            this.newvariable = 'hello';
        }

        var b = function() {
            console.log(this);
        }

        a();

        console.log(newvariable); // not good!

        b();

        var c = {
            name: 'The c object',
            log: function() {
                var self = this;

                self.name = 'Updated c object';
                console.log(self);

                var setname = function(newname) {
                    self.name = newname;
                }
                setname('Updated again! The c object');
                console.log(self);
            }
        }

        c.log();
      </code>
    </pre>
    <h1>Conceptual Aside - Arrays Collections of Anything</h1>
    <pre>
      <code>
        // array is a collection hold anything
        var arr = [
          1,
          false,
          {
            name: 'Tony',
            address: "111 main st"
          },
          function(name) {
            var greeting = 'Hello ';
            console.log(greeting + name);
          },
          'hello'
        ];

        console.log(arr);
        arr[3](arr[2].name);
      </code>
    </pre>
    <h2>'Arguments' AND Spread</h2>
    <p><strong>Arguments:</strong></p>
    <p>The parameters you pass to a function... Javascript gives you a keyword of the same name which contains them all</p>
    <pre>
      <code>
        function greet(firstname, lastname, language) {

          language = language || 'EN';

          if(arguments.length === 0) {
            console.log("Missing Parameters!");
            console.log('-------------------');
            return;
          }

          console.log(firstname);
          console.log(lastname);
          console.log(language);
          console.log('arg 0: ' + arguments[0]);
          console.log('------------------')

        }

        greet();
        greet("Sam");
        greet('John', 'Smith');
        greet('Steve', 'Buck', 'ES');
      </code>
    </pre>
    <h2>Function Overloading</h2>
    <pre>
      <code>
        function greet(firstname, lastname, language) {

            language = language || 'en';

            if (language === 'en') {
                console.log('Hello ' + firstname + ' ' + lastname);
            }

            if (language === 'es') {
                console.log('Hola ' + firstname + ' ' + lastname);
            }

        }

        function greetEnglish(firstname, lastname) {
            greet(firstname, lastname, 'en');
        }

        function greetSpanish(firstname, lastname) {
            greet(firstname, lastname, 'es');
        }

        greetEnglish('John', 'Doe');
        greetSpanish('John', 'Doe');
      </code>
    </pre>
    <h2>Conceptual Aside - Syntax Parsers</h2>
    <p>Reading your code chracter by character</p>
    <pre>
      <code>
        return;
    </code>
  </pre>
  <h2>Dangerous Aside - Automatic Semicolon Insertion</h2>
  <p>Don't leave out semicolons!!!</p>
  <p><strong>Bad Example</strong></p>
  <pre>
    <code>
      function getPerson() {

        return // syntax parser automaticall adds semicolon after return (BAD)
        {
          firstname: 'Tony'
        }

      }

      console.log(getPerson);
    </code>
  </pre>
  <p><strong>Good Example</strong></p>
  <pre>
    <code>
      function getPerson() {

        return { // it reads this line and continues (doesn't add semicolon after return)
          firstname: 'Tony'
        }

      }

      console.log(getPerson);
    </code>
  </pre>
  <h2>Framework Aside - Whitespaces</h2>
  <p><strong>Whitespace:</strong></p>
  <p>Invisible characters that create literal 'space' in your written code... Carriage returns, tabs, spaces</p>
  <pre>
    <code>
      var
          // first name of the perons
          firstname,

          // last name of the perons
          lastname,

          // the language
          // can be 'en' or 'es'
          language;

          var person = {
              // the first name
            firstname: 'Sam',
            // the last name
            // (always required)
            lastname: 'Harvey'
          }

          console.log(person);
    </code>
  </pre>
  <h1>Immediately Invoked Function Expressions (IIFE)S</h1>
  <pre>
    <code>
      // function statement
      function greet(name) {
          console.log('Hello ' + name);
      };
      greet('Sam');

      // using a function expression
      var greetFunc = function(name) {
          console.log('Hello ' + name);
      };
      greetFunc('Sam');

      // this invokes the function immediatley after creating it
      // Immediatley Invoked Function Expression (IIFE)
      var greeting = function(name) {

          return 'Hello ' + name;

      }('Steve');

      console.log(greeting);

      // other way
      var firstname = 'Cheree';
      (function(name) {

          var greeting = 'Inside IIFE: Hello';
          console.log(greeting + ' ' + name)

      }(firstname)); // IIFE
    </code>
  </pre>
  <h3>Framework Aside - IIFES AND Safe Code</h3>
  <pre>
    <code>
      // IIFE (will not be global)
      (function(name) {

          var greeting = 'Hello';
          console.log(greeting + ' ' + name)

      }('John')); // IIFE

      console.log(greeting);

      // IIFE (will be global)
      (function(global, name) {

          var greeting = 'Hello';
          global.greeting = 'Hello';
          console.log(greeting + ' ' + name)

      }(window, 'John')); // IIFE

      console.log(greeting);
    </code>
  </pre>
  <h2>Understanding Closures</h2>
  <p>Part I</p>
  <pre>
    <code>
      function greet(whattosay) {

        return function(name) {
          console.log(whattosay + ' ' + name);
        }

      }

      var sayHi = greet('Hi');
      sayHi('Tony');
    </code>
  </pre>
  <p>Part II</p>
  <pre>
    <code>
      function buildFunctions() {
        var arr = [];

        for (var i = 0; i < 3; i++) {
          arr.push(
            function() {
              console.log(i);
            }
          )
        }
        return arr;
      }

      var fs = buildFunctions();

      fs[0]();
      fs[1]();
      fs[2]();
      // outpus 3, 3, 3 // not what we want

      function buildFunctions2() {
        var arr = [];

        for (var i = 0; i < 3; i++) {
          arr.push(
            (function(j) {
              return function() {
                console.log(j);
              }
            }(i))
          )
        }
        return arr;
      }

      var fs2 = buildFunctions2();

      fs2[0]();
      fs2[1]();
      fs2[2]();
      // loops through and outpus 0, 1, 2 // this is what we want

    </code>
  </pre>
  <h2>Framwork Aside - Function Factories</h2>
  <p><strong>Factory Function that returns or makes other things for me</strong></p>
  <pre>
    <code>
      function makeGreeting(language) { // acted as a factory function

        return function(firstname, lastname) {

          if (language === 'en') {
            console.log('Hello ' + firstname + ' ' + lastname);
          }

          if (language === 'es') {
            console.log('Hola ' + firstname + ' ' + lastname);
          }

        }

      }

      var greetEnglish = makeGreeting('en');
      var greetSpanish = makeGreeting('es');

      greetEnglish('Sam', 'Harvey');
      greetSpanish('Jesus', 'Padilla');
    </code>
  </pre>
  <h2>Closure And Callbacks</h2>
  <p><strong>Callback Function:</strong></p>
  <p>A function you give to another function, to be run when the other function is finished... So the function you call (i.e. invoke), 'calls back' by calling the function you gave it when it finishes</p>
  <pre>
    <code>
      function sayHiLater() {

        var greeting = 'Hi';

        setTimeout(function() {

          console.log(greeting);

        }, 3000);

      }

      sayHiLater();

      // jQuery uses function expressions and first-class function!
      //$('button').click(function() {
      //
      //});

      function tellMeWhenDone(callback) {

        var a = 1000; // some work
        var b = 2000; // some work

        callback(); // the 'callback', it runs the function I give it!

      }

      tellMeWhenDone(function() {

        console.log('I am done!');

      });

      tellMeWhenDone(function() {

        console.log('All done');

      });

    </code>
  </pre>
  <h1>call(), apply(), bind()</h1>
  <p><strong>Function Currying:</strong></p>
  <p>Creating a copy of a function but with some preset parameters... Very useful in mathematical situation</p>
  <pre>
    <code>
      var person = {
        firstname: 'John',
        lastname: 'Doe',
        getFullName: function() {

          var fullname = this.firstname + ' ' + this.lastname;
          return fullname;

        }
      }

      var logName = function(lang1, lang2) {

        console.log('Logged: ' + this.getFullName());
        console.log('Arguments: ' + lang1 + ' ' + lang2);
        console.log('-------------------')

      }

      var logPersonName = logName.bind(person);
      logPersonName('en');

      logName.call(person, 'en', 'es');
      logName.apply(person, ['en', 'es']);

      (function(lang1, lang2) {

        console.log('Logged: ' + this.getFullName());
        console.log('Arguments: ' + lang1 + ' ' + lang2);
        console.log('-------------------')

      }).apply(person, ['es', 'en']);

      // function borrowing
      var person2 = {
        firstname: 'Harry',
        lastname: 'Stevens'
      }

      console.log(person.getFullName.apply(person2));

      // function currying
      function multiply(a, b) {
        return a * b;
      }

      var multiplyByTwo = multiply.bind(this, 2);
      console.log(multiplyByTwo(4))

      var multiplyByThree = multiply.bind(this, 3);
      console.log(multiplyByThree(4))
    </code>
  </pre>
  <h1>Functional Programming</h1>
  <pre>
    <code>
      // Part I
      function mapForEach(arr, fn) {

        var newArr = [];
        for (var i=0; i < arr.length; i++) {
          newArr.push(
            fn(arr[i])
          )
        };

        return newArr;

      }

      var arr1 = [1, 2, 3];
      console.log(arr1);

      var arr2 = mapForEach(arr1, function(item) {
        return item * 2;
      });
      console.log(arr2);

      var arr3 = mapForEach(arr1, function(item) {
        return item > 2;
      });
      console.log(arr3);

      var checkPastLimit = function(limiter, item) {
        return item > limiter;
      }

      var arr4 = mapForEach(arr1, checkPastLimit.bind(this, 1));
      console.log(arr4);

      var checkPastLimitSimplified = function(limiter) {
        return function(limiter, item) {
          return item > limiter;
        }.bind(this, limiter);
      };

      var arr5 = mapForEach(arr1, checkPastLimitSimplified(1));
      console.log(arr5);

      // Part II

      // underscore.js
      var arr6 = _.map(arr1, function(item) {
        return item * 3
      });
      console.log(arr6);

      var arr7 = _.filter([1,2,3,4,5,6,7], function(item) {
        return item % 2 === 0;
      });
      console.log(arr7);
    </code>
  </pre>
  <h1>Object-Oriented Javascript AND Prototype Inheritance</h1>
  <h2>Conceptual Aside - Classial VS Prototypical Inheritance</h2>
  <p><strong>Inheritance:</strong></p>
  <p>One object gets access to the properties and methods of another object</p>
  <h4>Understanding the Prototypal</h4>
  <pre>
    <code>
      var person = {
          firstname: "Default",
          lastname: "default",
          getFullName: function() {
            return this.firstname + ' ' + this.lastname;
          }
      }

      var john = {
        firstname: "John",
        lastname: "Doe"
      }

      // Don't do this EVER!! for demo purposes only!!
      john.__proto__ = person;
      console.log(john.getFullName());
      console.log(john.firstname);

      var jane = {
        firstname: 'Jane'
      }

      jane.__proto__ = person;
      console.log(jane.getFullName());
    </code>
  </pre>
  <h3>Everything is an object (or a primitive) S5 L55</h3>
  <pre>
    <code>
      // run these through the console with __proto__ to see example in action
      var a = {};
      var b = function(){};
      var c = [];
    </code>
  </pre>
  <p><strong>Reflection:</strong></p>
  <p>An object can look at itself, listing and changing its properties and methods</p>
  <pre>
    <code>
      var person = {
            firstname: "Default",
            lastname: "default",
            getFullName: function() {
              return this.firstname + ' ' + this.lastname;
            }
        }

        var john = {
          firstname: "John",
          lastname: "Doe"
        }

        // Don't do this EVER!! for demo purposes only!!
        john.__proto__ = person;

        for (var prop in john) {
          if(john.hasOwnProperty(prop)) {
          console.log(prop + ': ' + john[prop]);
          }
        }

        var jane = {
          address: '111 Main St.',
          getFormalFullName: function() {
            return this.lastname + ', ' + this.firstname;
          }
        }

        var jim = {
          getFirstName: function() {
            return firstname;
          }
        }

        // using underscore lib
        _.extend(john, jane, jim);

        console.log(john);
    </code>
  </pre>
  <h1>Building Objects</h1>
  <h2>Function Constructors, 'new', AND the History of Javascript</h2>
  <p><strong>Function Constructor:</strong></p>
  <p>A normal 'this' variable points a new empty object, and that object is returned from the function automatically</p>
  <pre>
    <code>
      function Person(firstname, lastname) {

        this.firstname = firstname;
        this.lastname = lastname;
        console.log('THis function is being invoked');

      }

      var john = new Person('John', 'Doe');
      console.log(john);

      var jane = new Person('Jane', 'Doe');
      console.log(jane);
    </code>
  </pre>
  <h1>Function Constrictors And Prototype</h1>
  <pre>
    <code>
      function Person(firstname, lastname) {

        console.log(this);
        this.firstname = firstname;
        this.lastname = lastname;
        console.log('THis function is being invoked');

      }

      Person.prototype.getFullName = function () {
        return this.firstname + ' ' + this.lastname;
      }

      var john = new Person('John', 'Doe');
      console.log(john);

      var jane = new Person('Jane', 'Doe');
      console.log(jane);

      Person.prototype.getFormalFullName = function() {
        return this.lastname + ', ' + this.firstname;
      }

      console.log(john.getFormalFullName());
    </code>
  </pre>
  <h2>Dangerous Aside: 'new' and function</h2>
  <p>As in previous coding example, make sure to ad the 'new' before the object being made</p>
  <h2>Conceptual Aside: Built-In Function Constructors</h2>
  <pre>
    <code>
      String.prototype.isLengthGreaterThan = function(limit) {
        return this.length > limit;
      }

      console.log("John".isLengthGreaterThan(3));
    </code>
  </pre>
  <h2>Dangerous Aside: Built-In Function Constructors</h2>
  <h2>Dangerous Aside: Arrays and For... In</h2>
  <pre>
    <code>
      Array.prototype.myCustomFeature = 'cool';

      var arr = ['john', 'sam', 'mike'];

      for (var prop in arr) {
        console.log(prop + ': ' + arr[prop]);
      }

      // Don't use For Ins for arrays, use below... it's safe
      for (var i = 0; i < arr.length; i++) {

      }
    </code>
  </pre>
  <h1>Object.create AND Pure Prototypal Inheritance</h1>
  <p><strong>Polyfill:</strong></p>
  <p>Code that adds a feature which the engine MAY lack</p>
  <pre>
    <code>
      // polyfill
      if(!Object.create) {
        Object.create = function(o) {
          if (arguments.length > 1) {
            throw new Error('Object.create implementation'
            + 'only accepts the first parameter.');
          }
          function F() {}
          F.prototype = o;
          return new F();
        };
      }

      var person = {
        firstname: 'Default',
        lastname: 'Default',
        greet: function() {
          return 'Hi ' + this.firstname;
        }
      }

      var john = Object.create(person);
      john.firstname = 'John';
      john.lastname = 'Doe';
      console.log(john);
    </code>
  </pre>
  <h2>ES6 AND Classes</h2>
  <pre>
    <code>
      // class
      class Person {

        constructor(firstname, lastname) {
          this.firstname = firstname;
          this.lastname = lastname;
        }

        greet() {
          return 'Hi ' + firstname;
        }

      }

      var john = new Person('John', 'Doe');

      // set the prototype
      class InformalPerson extends Person { // extends 'Sets the Protoype (__proto__)'

        constructor(firstname, lastname) {
          super(firstname, lastname);
        }

        greet() {
          return 'Yo ' + firstname;
        }

      }
    </code>
  </pre>
  <p><strong>Syntactic Sugar:</strong></p>
  <p>A different way to TYPE something that doesn't change how it works under the hood</p>
  <h1>Odds and Ends</h1>
  <p>Other things that could have been applied in the coarse but didn't want to distract and get deeper</p>
  <h2>Initialization</h2>
  <pre>
    <code>
      var people = [
        {
          // the 'john' object
          firstname: 'John',
          lastname: 'Doe',
          address: [
            '111 Main St.',
            '222 Third St.'
          ]
        },
        {
          // the 'jane' object
          firstname: 'Jane',
          lastname: 'Doe',
          address: [
            '333 Main St.',
            '444 Fith St'
          ],
          greet: function() {
            return 'Hello';
          }
        }
      ]

      console.log(people);

      // run in console
      // people[1].greet()
      // output -> "Hello"
    </code>
  </pre>
  <h2>'typeof', 'instanceof', and Figure Out What Something Is</h2>
  <pre>
    <code>
      var a = 3;
      console.log(typeof a);

      var b = "Hello";
      console.log(typeof b);

      var c = {};
      console.log(typeof c);

      var d = [];
      console.log(typeof d); // weird!
      console.log(Object.prototype.toString.call(d)); // better!

      function Person(name) {
          this.name = name;
      }

      var e = new Person('Jane');
      console.log(typeof e);
      console.log(e instanceof Person);

      console.log(typeof undefined); // makes sense
      console.log(typeof null); // a bug since, like, forever...

      var z = function() { };
      console.log(typeof z);
    </code>
  </pre>
  <h2>Strict Mode</h2>
  <pre>
    <code>
      function logNewPerson() {
          "use strict";

          var person2;
          persom2 = {};
          console.log(persom2);
      }

      var person;
      persom = {};
      console.log(persom);
      logNewPerson();
    </code>
  </pre>
  <h1>Examining Famous Frameworks and Libraries</h1>
  <h2>Learning From Other's Good Code</h2>
  <h2>Deep Dive into Source Code: jQuery</h2>
  <p><strong>Method Chaining:</strong></p>
  <p>Calling one method after another, and each method affects the parent object... So obj.method1().method2() where both methods end up with a 'this' variable pointing at 'obj'</p>
  <h1>Let's Build A Frameork/Library!!</h1>
  <h2>Requirements</h2>
  <p>Name of Framework - Greeting</p>
  <ul>
    <li>When given a first name, last name, and optional language, it generates formal and informal greeting.</li>
    <li>Support English and Spanish languages.</li>
    <li>Reusable library/framework</li>
    <li>Easy to type 'G$()' structure</li>
    <li>Support of jQuery</li>
  </ul>
  <h2>Structure Safe Code</h2>
  <pre>
    <code>
      (function (global, $) {



      }(window, jQuery));
    </code>
  </pre>
  <h2>Our Object and It's Prototype</h2>
  <p><strong>Greetr</strong></p>
  <pre>
    <code>
      (function (global, $) {

        var Greetr = function(firstName, lastName, language) {
          return new Greetr.init(firstName, lastName, language);
        }

        Greetr.prototype = {};

        Greetr.init = function(firstName, lastName, language) {

          var self = this;
          self.firstname = firstName || '';
          self.lastname = lastName || '';
          self.language = language || 'en'; // English

        }

        Greetr.init.prototype = Greetr.prototype;

        global.Greetr = global.G$ = Greetr;


      }(window, jQuery));
    </code>
  </pre>
  <p><strong>App.js File run </strong></p>
  <pre>
    <code>
      var g = G$('John', 'Doe');
      console.log(g);
    </code>
  </pre>
  <h2>Properties and Chainable Methods</h2>
  <h3>Greetr.js</h3>
  <pre>
    <code>
      (function(global, $) {

          var Greetr = function(firstName, lastName, language) {
              return new Greetr.init(firstName, lastName, language);
          }

          var supportedLangs = ['en', 'es'];

          var greetings = {
              en: 'Hello',
              es: 'Hola'
          };

          var formalGreetings = {
              en: 'Greetings',
              es: 'Saludos'
          };

          var logMessages = {
              en: 'Logged in',
              es: 'Inició sesión'
          };

          Greetr.prototype = {

              fullName: function() {
                  return this.firstName + ' ' + this.lastName;
              },

              validate: function() {
                   if (supportedLangs.indexOf(this.language)  === -1) {
                      throw "Invalid language";
                   }
              },

              greeting: function() {
                  return greetings[this.language] + ' ' + this.firstName + '!';
              },

              formalGreeting: function() {
                  return formalGreetings[this.language] + ', ' + this.fullName();
              },

              greet: function(formal) {
                  var msg;

                  // if undefined or null it will be coerced to 'false'
                  if (formal) {
                      msg = this.formalGreeting();
                  }
                  else {
                      msg = this.greeting();
                  }

                  if (console) {
                      console.log(msg);
                  }

                  // 'this' refers to the calling object at execution time
                  // makes the method chainable
                  return this;
              },

              log: function() {
                  if (console) {
                      console.log(logMessages[this.language] + ': ' + this.fullName());
                  }

                  return this;
              },

              setLang: function(lang) {
                  this.language = lang;

                  this.validate();

                  return this;
              }

          };

          Greetr.init = function(firstName, lastName, language) {

              var self = this;
              self.firstName = firstName || '';
              self.lastName = lastName || '';
              self.language = language || 'en';

          }

          Greetr.init.prototype = Greetr.prototype;

          global.Greetr = global.G$ = Greetr;

      }(window, jQuery));
    </code>
  </pre>
  <h3>App.js</h3>
  <pre>
    <code>
      var g = G$('John', 'Doe');

      g.greet().setLang('es').greet(true);
    </code>
  </pre>
  <h2>Adding jQuery Support</h2>
  <h3>Greetr.js</h3>
  <pre>
    <code>
      (function(global, $) {

          var Greetr = function(firstName, lastName, language) {
              return new Greetr.init(firstName, lastName, language);
          }

          var supportedLangs = ['en', 'es'];

          var greetings = {
              en: 'Hello',
              es: 'Hola'
          };

          var formalGreetings = {
              en: 'Greetings',
              es: 'Saludos'
          };

          var logMessages = {
              en: 'Logged in',
              es: 'Inició sesión'
          };

          Greetr.prototype = {

              fullName: function() {
                  return this.firstName + ' ' + this.lastName;
              },

              validate: function() {
                   if (supportedLangs.indexOf(this.language)  === -1) {
                      throw "Invalid language";
                   }
              },

              greeting: function() {
                  return greetings[this.language] + ' ' + this.firstName + '!';
              },

              formalGreeting: function() {
                  return formalGreetings[this.language] + ', ' + this.fullName();
              },

              greet: function(formal) {
                  var msg;

                  // if undefined or null it will be coerced to 'false'
                  if (formal) {
                      msg = this.formalGreeting();
                  }
                  else {
                      msg = this.greeting();
                  }

                  if (console) {
                      console.log(msg);
                  }

                  // 'this' refers to the calling object at execution time
                  // makes the method chainable
                  return this;
              },

              log: function() {
                  if (console) {
                      console.log(logMessages[this.language] + ': ' + this.fullName());
                  }

                  return this;
              },

              setLang: function(lang) {
                  this.language = lang;

                  this.validate();

                  return this;
              },

              HTMLGreeting: function(selector, formal) {
                  if (!$) {
                      throw 'jQuery not loaded';
                  }

                  if (!selector) {
                      throw 'Missing jQuery selector';
                  }

                  var msg;
                  if (formal) {
                      msg = this.formalGreeting();
                  }
                  else {
                      msg = this.greeting();
                  }

                  $(selector).html(msg);

                  return this;

              }

          };

          Greetr.init = function(firstName, lastName, language) {

              var self = this;
              self.firstName = firstName || '';
              self.lastName = lastName || '';
              self.language = language || 'en';

          }

          Greetr.init.prototype = Greetr.prototype;

          global.Greetr = global.G$ = Greetr;

      }(window, jQuery));
    </code>
  </pre>
  <h3>App.js</h3>
  <pre>
    <code>
      var g = G$('John', 'Doe');

      g.greet().setLang('es').greet(true).log();
    </code>
  </pre>
  <h2>Good Commenting</h2>
  <h3>Greetr.js</h3>
  <pre>
    <code>
      (function(global, $) {

          // 'new' an object
          var Greetr = function(firstName, lastName, language) {
              return new Greetr.init(firstName, lastName, language);
          }

          // hidden within the scope of the IIFE and never directly accessible
          var supportedLangs = ['en', 'es'];

          // informal greetings
          var greetings = {
              en: 'Hello',
              es: 'Hola'
          };

          // formal greetings
          var formalGreetings = {
              en: 'Greetings',
              es: 'Saludos'
          };

          // logger messages
          var logMessages = {
              en: 'Logged in',
              es: 'Inició sesión'
          };

          // prototype holds methods (to save memory space)
          Greetr.prototype = {

              // 'this' refers to the calling object at execution time
              fullName: function() {
                  return this.firstName + ' ' + this.lastName;
              },

              validate: function() {
                  // check that is a valid language
                  // references the externally inaccessible 'supportedLangs' within the closure
                   if (supportedLangs.indexOf(this.language)  === -1) {
                      throw "Invalid language";
                   }
              },

              // retrieve messages from object by referring to properties using [] syntax
              greeting: function() {
                  return greetings[this.language] + ' ' + this.firstName + '!';
              },

              formalGreeting: function() {
                  return formalGreetings[this.language] + ', ' + this.fullName();
              },

              // chainable methods return their own containing object
              greet: function(formal) {
                  var msg;

                  // if undefined or null it will be coerced to 'false'
                  if (formal) {
                      msg = this.formalGreeting();
                  }
                  else {
                      msg = this.greeting();
                  }

                  if (console) {
                      console.log(msg);
                  }

                  // 'this' refers to the calling object at execution time
                  // makes the method chainable
                  return this;
              },

              log: function() {
                  if (console) {
                      console.log(logMessages[this.language] + ': ' + this.fullName());
                  }

                  // make chainable
                  return this;
              },

              setLang: function(lang) {

                  // set the language
                  this.language = lang;

                  // validate
                  this.validate();

                  // make chainable
                  return this;
              },

              HTMLGreeting: function(selector, formal) {
                  if (!$) {
                      throw 'jQuery not loaded';
                  }

                  if (!selector) {
                      throw 'Missing jQuery selector';
                  }

                  // determine the message
                  var msg;
                  if (formal) {
                      msg = this.formalGreeting();
                  }
                  else {
                      msg = this.greeting();
                  }

                  // inject the message in the chosen place in the DOM
                  $(selector).html(msg);

                  // make chainable
                  return this;
              }

          };

          // the actual object is created here, allowing us to 'new' an object without calling 'new'
          Greetr.init = function(firstName, lastName, language) {

              var self = this;
              self.firstName = firstName || '';
              self.lastName = lastName || '';
              self.language = language || 'en';

              self.validate();

          }

          // trick borrowed from jQuery so we don't have to use the 'new' keyword
          Greetr.init.prototype = Greetr.prototype;

          // attach our Greetr to the global object, and provide a shorthand '$G' for ease our poor fingers
          global.Greetr = global.G$ = Greetr;

      }(window, jQuery));
    </code>
  </pre>
  <h2>Let's Use Our Framework/Library</h2>
  <h3>Greetr.js</h3>
  <pre>
    <code>
      (function(global, $) {

          // 'new' an object
          var Greetr = function(firstName, lastName, language) {
              return new Greetr.init(firstName, lastName, language);
          }

          // hidden within the scope of the IIFE and never directly accessible
          var supportedLangs = ['en', 'es'];

          // informal greetings
          var greetings = {
              en: 'Hello',
              es: 'Hola'
          };

          // formal greetings
          var formalGreetings = {
              en: 'Greetings',
              es: 'Saludos'
          };

          // logger messages
          var logMessages = {
              en: 'Logged in',
              es: 'Inició sesión'
          };

          // prototype holds methods (to save memory space)
          Greetr.prototype = {

              // 'this' refers to the calling object at execution time
              fullName: function() {
                  return this.firstName + ' ' + this.lastName;
              },

              validate: function() {
                  // check that is a valid language
                  // references the externally inaccessible 'supportedLangs' within the closure
                   if (supportedLangs.indexOf(this.language)  === -1) {
                      throw "Invalid language";
                   }
              },

              // retrieve messages from object by referring to properties using [] syntax
              greeting: function() {
                  return greetings[this.language] + ' ' + this.firstName + '!';
              },

              formalGreeting: function() {
                  return formalGreetings[this.language] + ', ' + this.fullName();
              },

              // chainable methods return their own containing object
              greet: function(formal) {
                  var msg;

                  // if undefined or null it will be coerced to 'false'
                  if (formal) {
                      msg = this.formalGreeting();
                  }
                  else {
                      msg = this.greeting();
                  }

                  if (console) {
                      console.log(msg);
                  }

                  // 'this' refers to the calling object at execution time
                  // makes the method chainable
                  return this;
              },

              log: function() {
                  if (console) {
                      console.log(logMessages[this.language] + ': ' + this.fullName());
                  }

                  // make chainable
                  return this;
              },

              setLang: function(lang) {

                  // set the language
                  this.language = lang;

                  // validate
                  this.validate();

                  // make chainable
                  return this;
              },

              HTMLGreeting: function(selector, formal) {
                  if (!$) {
                      throw 'jQuery not loaded';
                  }

                  if (!selector) {
                      throw 'Missing jQuery selector';
                  }

                  // determine the message
                  var msg;
                  if (formal) {
                      msg = this.formalGreeting();
                  }
                  else {
                      msg = this.greeting();
                  }

                  // inject the message in the chosen place in the DOM
                  $(selector).html(msg);

                  // make chainable
                  return this;
              }

          };

          // the actual object is created here, allowing us to 'new' an object without calling 'new'
          Greetr.init = function(firstName, lastName, language) {

              var self = this;
              self.firstName = firstName || '';
              self.lastName = lastName || '';
              self.language = language || 'en';

              self.validate();

          }

          // trick borrowed from jQuery so we don't have to use the 'new' keyword
          Greetr.init.prototype = Greetr.prototype;

          // attach our Greetr to the global object, and provide a shorthand '$G' for ease our poor fingers
          global.Greetr = global.G$ = Greetr;

      }(window, jQuery));
    </code>
  </pre>
  <h3>App.js</h3>
  <pre>
    <code>
      // gets a new object (the architecture allows us to not have to use the 'new'
      // keyword here)
      var g = G$('John', 'Doe');

      // use our chainable methods
      g.greet().setLang('es').greet(true).log();

      // let's use our object on the click of the login button
      $('#login').click(function() {

        // create a new 'Greetr' object (let's pretend we know the name from the login)
        var loginGrtr = G$('John', 'Doe');

        // hide the login on the screen
        $('#logindiv').hide();

        // fire off an HTML greeting, passing the '#greeting' as the selector and
        // the chosen language, and log the welcome as well
        loginGrtr.setLang($('#lang').val()).HTMLGreeting('#greeting', true).log();

      });
    </code>
  </pre>
  <p><strong>Transpile:</strong></p>
  <p>Convert the syntax of one programming language, to antother... In this case languages that don't really ever run anywhere, but instead are processed by 'transpilers' that generate JavaScript</p>
  <p>typescriptlang.org</p>
  </body>
</html>
