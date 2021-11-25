gsap.registerPlugin(ScrollTrigger);


ScrollTrigger.create({
    trigger: "#timeline",
    start: "top 150px",
    end : "bottom 600px",
    pin: "#timelinepin"
})


//gsap.to('#seeYou', {
//    x: -150,
//    duration: .5,
//    scrollTrigger: {
//        trigger: "#in2022",
//        start: "top 90%",
//        end: "top 10%",
//        scrub: 1
////        markers: true
//    }
//})
//
//gsap.to('#in2022', {
//    x: 200,
//    duration: .5,
//    scrollTrigger: {
//        trigger: "#in2022",
//        start: "top 90%",
//        end: "top 10%",
//        scrub: 1
////        markers: true
//    }
//})


//gsap.to('#bsm', {
//    x: 100,
//    duration: .5,
//    scrollTrigger: {
//        trigger: "#bsm",
//        start: "top 90%",
//        end: "top 10%",
//        scrub: 1
////        markers: true
//    }
//})


//document.querySelectorAll(".home-venture-list li").forEach((item) => {
//  gsap.to(item, {
//    duration: 0.9,
//    opacity: 1,
//    scrollTrigger: {
//      trigger: item,
//      start: "bottom 95%",
//      end: "bottom 10%"
//    }
//
//  })
//})


//document.querySelectorAll(".stat-row").forEach((statrow) => {
//  gsap.to(statrow, {
//    duration: 0.9,
//    opacity: 1,
//    scrollTrigger: {
//      trigger: statrow,
//      start: "bottom 95%",
//      end: "bottom 10%"
//    }
//
//  })
//})

