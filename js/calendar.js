function bisextile(annee) {
    if ((annee % 4 == 0 && annee % 100 != 0) || annee % 400 == 0) {
        return 1
    }
    else {
        return 0
    }
}

function jMax(mois, annee) {
    m = (1, 3, 5, 7, 8, 10, 12)
    if (mois == 2) {
        b = bisextile(annee)
        if (b == true) {
            return 29
        }
        else {
            return 28
        }
    }
    else if (mois in m) {
        return 31
    }
    else {
        return 30
    }
}

function zeller(m, a, b, j) {
    c=Math.floor(a/100)
    a=a-c*100
    m=((m-3)%12+1)+3
    if (m < 3){
        m+=12
        //a-=1
    }
    k=Math.floor(a/4)
    M=(Math.floor(2.6*(m-2)-0.2)-((1+b)*Math.floor(m/11))-2)
    while (M<0){
        M+=7
    }
    while (M>=7){
        M-=7
    }
    q=Math.floor(c/4)
    res = (k+a+M+j+5*c+q+2)-1
    while (res<0){
        res+=7
    }
    while (res>=7){
        res-=7
    }
    if (m == 11 || m == 12){
        res+=1
    }
    alert("c = "+c+" a = "+a+" m = "+m+" k = "+k+" M = "+M+" q = "+q+" res = "+res)
    return res
}

function getMois() {
    tabMois = ["Janvier","Frévier","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre"]
    mois = document.getElementById('mois').innerHTML
    for (var i = 0; i < tabMois.length; i++){
        if (tabMois[i] == mois){
            return i
        }
    }
    return NaN
}

function getAnnee() {
    annee = document.getElementById('annee').innerHTML
    return parseInt(annee)
}

function moisPlus() {
    tabMois = ["Janvier","Frévier","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre"]
    mois = getMois()
    nmois = mois + 1
    if (nmois > 11){
        nmois = 0
        document.getElementById('annee').innerHTML = parseInt(document.getElementById('annee').innerHTML) + 1
    }
    document.getElementById('mois').innerHTML = tabMois[nmois]
    placeJours()
}

function moisMoins() {
    tabMois = ["Janvier","Frévier","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre"]
    mois = getMois()
    nmois = mois - 1
    if (nmois < 0){
        nmois = 11
        document.getElementById('annee').innerHTML = document.getElementById('annee').innerHTML - 1
    }
    document.getElementById('mois').innerHTML = tabMois[nmois]
    placeJours()
}

function placeJours() {
    mois = getMois()
    annee = getAnnee()
    j = 1
    b = bisextile(annee)
    zell = zeller(mois, annee, b, j)
    //alert(zell)
}


function init() {
    document.getElementById('moisMoins').addEventListener('click', moisMoins)
    document.getElementById('moisPlus').addEventListener('click', moisPlus)
    placeJours()
}

window.onload = init

