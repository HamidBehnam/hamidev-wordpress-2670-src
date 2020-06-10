import '../../styles/global/global.scss';

const doSomething = () => {
    console.log("this is the doSomething method!, in global.ts file!");
};

doSomething();

window.onload = async () => {
    const isPage: boolean = Boolean(document.getElementsByClassName('page-template-default').length);
    const isPost: boolean = Boolean(document.getElementsByClassName('post-template-default').length);

    if (isPost) {
        console.log("this is the post content;");
        await import(/* webpackChunkName: "single" */ '../single/single');
    }

    if (isPage) {
        console.log("this is the page content;");
        const theResult = await import(/* webpackChunkName: "page" */ '../page/page');
        theResult.processor("Hamid", 317);
    }
};
