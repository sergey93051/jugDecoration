require('./bootstrap');
import $ from 'jquery';
 window.$ = window.jQuery = $;

 import 'jquery-ui/ui/widgets/datepicker.js';

import {index,product} from './index.js';
 import {sentAjax} from './ajax.js';
 //mainpage page1   (/)
 
 index();
 sentAjax();
 product(); 








