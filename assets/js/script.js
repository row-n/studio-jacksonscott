import $ from 'jquery';

import './plugins/hero';
import './plugins/lazy-load';
import './plugins/menu';
import './plugins/to-top';

$('#menu').Menu();
$('#hero').Hero();
$('#scroll-to-top').ScrollToTop();
