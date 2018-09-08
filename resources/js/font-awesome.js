/**
 * Font Awesome 5
 */
import { library, dom } from '@fortawesome/fontawesome-svg-core'
import { fa } from '@fortawesome/fontawesome-free'
import { solid } from '@fortawesome/free-solid-svg-icons';
import { regular } from '@fortawesome/free-regular-svg-icons';
import { brands } from '@fortawesome/free-brands-svg-icons';

library.add(solid, regular, brands);

dom.watch()
