
function setTime() {
    setInterval(() => {
        const date = new Date()
        var hours = date.getHours()
        var minutes = checkSingleDigit(date.getMinutes())
        var seconds = checkSingleDigit(date.getSeconds())
        document.getElementById('orologio').value = hours + ':' + minutes + ':' + seconds;
    }, 1000)
}

function checkSingleDigit(digit) {
    return ('0' + digit).slice(-2)
}

setTime();
