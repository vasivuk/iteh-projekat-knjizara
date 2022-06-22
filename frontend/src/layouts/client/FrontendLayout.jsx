import React from "react";
import Navbar from "./Navbar.jsx";
import publicRoutesList from "../../routes/PublicRoutes";
import { Switch, Route } from "react-router-dom";

const FrontendLayout = () => {
  return (
    <div>
      <Navbar />
        <Switch>
          {publicRoutesList.map((routedata, idx) => {
            return (
              routedata.component && (
                <Route
                  key={idx}
                  path={routedata.path}
                  exact={routedata.exact}
                  name={routedata.name}
                  render={(props) => <routedata.component {...props} />}
                />
              )
            );
          })}
        </Switch>
    </div>
  );
};

export default FrontendLayout;
