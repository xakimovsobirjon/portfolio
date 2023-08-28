let toggle = document.querySelector('.toggle'),
    config = document.querySelector('.config');
// function configActive() {
//
//     toggle.onclick = function () {
//         config.classList.toggle('active')
//     }
// }
// configActive()






function navigation() {
    const btn = document.querySelector('.menuBar');
    const navigation = document.querySelector('.navigation');
    const navigationItems = document.querySelectorAll('.navigation a');



    navigationItems.forEach(navItem => {
        navItem.addEventListener('click', () => {
            btn.classList.remove('active');
            navigation.classList.remove('active');
        })
    })
    btn.addEventListener('click', () => {
        btn.classList.toggle('active')
        navigation.classList.toggle('active')
    })
}

navigation()


// Education va Experience navigatsiyasi

function navigationEduExp() {
    const leftItems = document.querySelectorAll(".content .left");
    const rightItems = document.querySelectorAll(".content .right");
    const spanClose = document.querySelectorAll(".content #orient");


    // leftItems.forEach((i, o) => i.addEventListener('click', () => {
    //     // Bu display bilan amal
    //     rightItems.forEach(e => e.style.display = 'none');
    //     e[o].classList.toggle('opening')
    // }))
    // leftItems.forEach((i, o) => {
    //     i.onclick = function () {
    //         rightItems.forEach(e => {
    //             e[o].style.display = "flex"
    //         })
    //     }
    // })
    leftItems.forEach((i, o) => i.onclick = function () {
        rightItems[o].classList.toggle("opening")
    })
}
navigationEduExp()










function navigationEduExpBtns() {
    const eduBtn = document.querySelector("#education")
    const expBtn = document.querySelector("#experience")
    const eduResume = document.querySelector(".edu")
    const expResume = document.querySelector(".exp")

    eduBtn.onclick = function () {
        eduResume.style.display = 'flex';
        expResume.style.display = 'none';
        eduBtn.style.backgroundColor = "#858792"
        expBtn.style.backgroundColor = "transparent"
    }
    expBtn.onclick = function () {
        eduResume.style.display = 'none'
        expResume.style.display = 'flex'
        expBtn.style.backgroundColor = "#858792"
        eduBtn.style.backgroundColor = "transparent"
    }
}
navigationEduExpBtns()







