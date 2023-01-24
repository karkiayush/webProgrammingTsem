const dynamicMessage = (identity = "Krisha", location = "Manhattan Newyork") => {
    let message = `Hello ${identity} may you have a great year ahead & see you soon in ${location}`;

    return message;
}

console.log(dynamicMessage());

console.log(dynamicMessage("Raju", "Texas"));