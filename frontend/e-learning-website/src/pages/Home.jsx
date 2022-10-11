import React, { Fragment } from "react";
import Header from "../components/Header";
import HeroSection from "../components/HeroSection";
import AboutUs from "../components/AboutUs";
import Footer from "../components/Footer";
import Courses from "../components/Courses";

const Home = () => {
  return (
    <Fragment>
      <Header />
      <HeroSection />
      <AboutUs />
      <Courses />
      <Footer />
    </Fragment>
  );
};

export default Home;
