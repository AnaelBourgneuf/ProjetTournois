var progressBar = document.getElementById("progressBar");
var block = progressBar.parentNode
var i = 0
var interval
interval = setInterval(function () {
    progressBar.style.width = i+"%"
    progressBar.setAttribute("aria-valuenow",i)
    progressBar.innerHTML = i+"%"
    i++
    if (i == 101){
        clearInterval(interval)
        block.removeChild(progressBar)
        block.className = "alert alert-success"
        progressBar.setAttribute("role","alert")
        block.innerHTML = "Votre compte a bien été créé."
    }
}, 40)


