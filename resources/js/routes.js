import App from './components/App'
import Index from './components/Index'
// import User from './components/User/User'
// import Admin from './components/Admin/Admin'


export const routes = [
    {
        path: '/',
        name: 'index',
        component: Index,
        
    },
    {
        path: '/login',
        redirect: '/'
        
    },

    // //USER AREA
    // {
    //     path: '/user',
    //     name: 'user',
    //     component: User,
    //     children: [
    //         {
    //             path: '/',
    //             name: 'userdashboard',
    //             component: UserDashboard,
    //         }, 
            
    //     ]
    // },
    // //ADMIN AREA
    // {
    //     path: '/admin',
    //     name: 'admin',
    //     component: Admin,
    //     children: [
    //         {
    //             path: '/',
    //             name: 'admindashboard',
    //             component: AdminDashboard,
    //         }, 
    //     ]
    // },



];