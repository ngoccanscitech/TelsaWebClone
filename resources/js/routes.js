import Home from './components/HomeComponent.vue'
import Categories from './components/screens/admin/category/Categories.vue'
import AddCategory from './components/screens/admin/category/AddCategory.vue'
import EditCategory from './components/screens/admin/category/EditCategory.vue'
import Products from './components/screens/admin/product/Products.vue'
import AddProduct from './components/screens/admin/product/AddProduct.vue'
import EditProduct from './components/screens/admin/product/EditProduct.vue'
import HomePage from './components/screens/client/HomePage.vue'
import Login from './components/screens/auth/Login.vue'
import Shop from './components/screens/client/shop/Shop.vue'
import ProductDetails from './components/screens/client/shop/ProductDetails.vue'
import CategoryProducts from './components/screens/client/shop/CategoryProducts.vue'
import Cart from './components/screens/client/shop/Cart.vue'
import Customers from './components/screens/admin/cart/Customers.vue'
import CustomerDetail from './components/screens/admin/cart/CustomerDetail.vue'

export default {
    mode: 'history',
    routes: [
        {
            path: '/admin',
            component: Home
        },
        {
            path: '/admin/categories',
            component: Categories
        },
        {
            path: '/admin/addCategory',
            component: AddCategory
        },
        {
            path: '/admin/editCategory',
            component: EditCategory,
            props: true,
            name: 'EditCategory'
        },
        {
            path: '/admin/products',
            component: Products
        },
        {
            path: '/admin/addProduct',
            component: AddProduct
        },
        {
            path: '/admin/editProduct',
            component: EditProduct,
            props: true,
            name: 'EditProduct'
        },
        {
            path: '/home',
            component: HomePage
        },
        {
            path: '/login',
            component: Login,
            name: 'Login'
        },
        {
            path: '/shop',
            component: Shop,
            name: 'Shop'
        },
        {
            path: '/shop/productDetails',
            component: ProductDetails,
            props: true,
            name: 'ProductDetails'
        },
        {
            path: '/shop/category/products',
            component: CategoryProducts,
            props: true,
            name: 'CategoryProducts'
        },
        {
            path: '/shop/cart',
            component: Cart,
            name: 'Cart'
        },
        {
            path: '/admin/customers',
            component: Customers,
            name: 'Customers'
        },
        {
            path: '/admin/customerDetail',
            component: CustomerDetail,
            name: 'CustomerDetail',
            props: true
        }

    ]
}