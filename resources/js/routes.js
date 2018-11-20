import App from './components/App'
import Index from './components/Index'
import Login from './components/Login'
import Register from './components/Register'
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
        name: 'login',
        component: Login,
        
    },
    {
        path: '/register',
        name: 'register',
        component: Register,
        
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