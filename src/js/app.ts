// @ts-ignore
import Utility from "./utility";
// @ts-ignore
import {default as Common} from './common';
// @ts-ignore
import Page from './page';
// @ts-ignore
import BudouX from './budoux';
// @ts-ignore
import GridViewer from './mv';

class APP {
    constructor() {
        const common = new Common();
        common.load();
        // new Barba();
        new Page();
        new BudouX();
        if (document.querySelector('#mv') && Utility.isPC()) {
            new GridViewer();
        }
    }
}

new APP()