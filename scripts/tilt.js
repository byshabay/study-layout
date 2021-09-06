!function () {
    function e() {
        var e = 0;[].slice.call(document.querySelectorAll("a.tilter")).forEach(function (a, t) {
            e = t % 2 == 0 ? e + 1 : e, new TiltFx(a, n[e - 1])
        })
    } var n = [{},
    { movement: { imgWrapper: { translation: { x: 10, y: 10, z: 30 }, rotation: { x: 0, y: -10, z: 0 }, reverseAnimation: { duration: 200, easing: "easeOutQuad" } }, lines: { translation: { x: 10, y: 10, z: [0, 70] }, rotation: { x: 0, y: 0, z: -2 }, reverseAnimation: { duration: 2e3, easing: "easeOutExpo" } }, caption: { rotation: { x: 0, y: 0, z: 2 }, reverseAnimation: { duration: 200, easing: "easeOutQuad" } }, overlay: { translation: { x: 10, y: -10, z: 0 }, rotation: { x: 0, y: 0, z: 2 }, reverseAnimation: { duration: 2e3, easing: "easeOutExpo" } }, shine: { translation: { x: 100, y: 100, z: 0 }, reverseAnimation: { duration: 200, easing: "easeOutQuad" } } } }]; imagesLoaded(document.querySelector("main"), function () { document.body.classList.remove("loading"), e() })
}()