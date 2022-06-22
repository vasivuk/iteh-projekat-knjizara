import Home from "../components/frontend/Home";
import Register from "../components/frontend/auth/Register";
import Login from "../components/frontend/auth/Login";

const PublicRoutes = [
  {
    path: "/",
    exact: true,
    name: "Home",
    component: Home,
  },
  {
    path: "/login",
    exact: true,
    name: "Login",
    component: Login,
  },
  {
    path: "/register",
    exact: true,
    name: "Register",
    component: Register,
  },
];

export default PublicRoutes;
