class variousData {
    constructor(fullName, stream, interest) {
        this.fullName = fullName;
        this.stream = stream;
        this.interest = interest;
    }

    getName() {
        return `Full Name is: ${this.fullName}`;
    }

    getStreamAndInterest() {
        return `My stream is ${this.stream} and i'm interested in ${this.interest} `;
    }
}


const vData1 = new variousData('Joe Denly', 'Computer Science', 'AI/ML');

console.log(vData1);
console.log(vData1.getName());
console.log(vData1.getStreamAndInterest());
