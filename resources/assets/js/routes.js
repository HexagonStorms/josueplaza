import Index from './components/Index.vue';
import Portfolio from './components/Portfolio.vue';
import Resume from './components/Resume.vue';
import Contact from './components/Contact.vue';

export const routes = [
	{ 
		path: '',
		component: Index,
	},
	{ 
		path: '/portfolio',
		component: Portfolio,
	},
	{ 
		path: '/resume',
		component: Resume,
	},
	{ 
		path: '/contact',
		component: Contact,
	}
];