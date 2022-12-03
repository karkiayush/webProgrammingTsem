class formUpdate {
    submit() {
        alert("Form submitted");
    }
    cancel() {
        alert(this.name + " your form is cancelled");
    }
    formName(passengername) {
        this.name = passengername;
    }
}
let joe = new formUpdate()
let mike = new formUpdate()

joe.submit();
mike.submit();
mike.formName("harry")
mike.cancel();
