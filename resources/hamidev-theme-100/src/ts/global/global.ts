import '../../styles/global/global.scss';

const doSomething = () => {
    console.log("this is the doSomething method!, in global.ts file!");
};

doSomething();

window.onload = () => {
    const pageModuleLoaderButton = document.getElementById("page-module-loader");
    const singleModuleLoaderButton = document.getElementById("single-module-loader");

    if (pageModuleLoaderButton) {
        pageModuleLoaderButton.addEventListener("click", async () => {
            const theResult = await import(/* webpackChunkName: "page" */ '../page/page');
            theResult.processor("Hamid", 317);
        });
    }

    if (singleModuleLoaderButton) {
        singleModuleLoaderButton.addEventListener("click", async () => {
            await import(/* webpackChunkName: "single" */ '../single/single');
        });
    }
};
