import '../../../styles/global/eager-load/global.scss';

const doSomething = () => {
    console.log("this is the doSomething method!, in global.ts file!!");
};

doSomething();

setTimeout(async () => {
    await import(/* webpackChunkName: "global-lazy" */ '../lazy-load/global');
}, 4000);

window.onload = async () => {
    //
};
