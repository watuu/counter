// @ts-ignore
import Utility from "./utility";
// @ts-ignore
import {default as Common} from './common';
// @ts-ignore
import Page from './page';
import VFX from './vfx';
// @ts-ignore
import BudouX from './budoux';
// @ts-ignore
import GridViewer from './mv';

import { RepeatTextScrollFx } from './repeatTextScrollFx';

class APP {
    constructor() {
        const common = new Common();
        common.load();
        // new Barba();
        new Page();
        new BudouX();
        if (document.querySelector('#mv') ) {
            new GridViewer();
        }
        new RepeatTextScrollFx();
        // new VFX();
    }
}

new APP()