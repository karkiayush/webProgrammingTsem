// class formUpdate {
//     submit() {
//         alert("Form submitted");
//     }
//     cancel() {
//         alert(this.name + " your form is cancelled");
//     }
//     formName(passengername) {
//         this.name = passengername;
//     }
// }
// let joe = new formUpdate()
// let mike = new formUpdate()

// joe.submit();
// mike.submit();
// mike.formName("harry")
// mike.cancel();

// let lecture = 10;
// let section = 3;
// let title = "javascript";
// document.writeln(lecture);
// document.writeln(section);
// document.writeln(title);

// course is the object 
// const course = {
//     // hp, torque are the properties 
//     hp: 200, torque: 140, title: "javascript",
//     // nesting the object 
//     notes: {
//         intro: "Welcome to complete front end developement course"
//     },
//     // fun inside of the object 
//     info() {
//         console.log("congra tulation on your successfull enrollment ");
//     }
// }

// document.writeln(course.info());//not running don't know ?
// document.writeln(course.hp);
// document.writeln(course.torque);
// document.writeln(course.title);

// //object/properties in the object is dynamic
// course.price = 9999;
// document.writeln(course.price);

// //But if we change the value of the const variable that is not the member of the object, the output won't be seen in the console, local host
// const checking = "checking";
// checking = 'unchecked';
// document.writeln(checking);//no output will be seen


// // Here the object being the refrence data type not like the primitive data typeof, so the reinitialization of the datatype can be done 














// FACTORY OR CONSTRUCTION FUNCTION MUST BE USED TO MAKE THE OBJECT WHICH FOLLOWS THE PRINCIPLE OF "DRY" 
// function createCourse() {
//     const course = {
//         // hp, torque are the properties 
//         hp: 200, torque: 140, title: "javascript",
//         // nesting the object 
//         notes: {
//             intro: "Welcome to complete front end developement course"
//         },
//         // fun inside of the object 
//         info() {
//             console.log("congratulation on your successfull enrollment ");
//         }
//     }
//     return course;
// }

// const course = createCourse();
// course.hp;
// course.torque;\



//Constructor Function : pascal case
function Information(name) {
    this.name = name,
        this.enroll = function () {
            document.write("Your name is: ", name);
        }
}
const info = new Information('Mike');
info.enroll()


// Factory fun produce the objects 
function data() {
    const circle = {
        radius: 1,
        location: {
            hometown: "Ithari",
            province: 1
        },
        isVisible: true,
        draw: function () {
            document.write('Hello world');
        }
    };
}