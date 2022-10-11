import React from "react";
import "../App.css";
import aboutUsImg from "../assets/about-us.png";
import HelpOther from "../assets/Help-Others.gif";
import SolveProblems from "../assets/Stay-true.gif";
import AllIn from "../assets/Prize-simplicity.gif";
import Simplicity from "../assets/Find-Balance.gif";

const AboutUs = () => {
  return (
    <div>
      <h1 className="headers">————— About Us —————</h1>
      <div className="about-header">
        <div>
          <img className="about-img" src={aboutUsImg} alt="aboutUsImage" />
        </div>
        <div className="about-caption">
          <h1>Hi, we’re LearningMS</h1>
          <p>
            And we’re changing the way people think and feel about training.
          </p>
        </div>
      </div>
      <div className="work-description-section">
        <h1>How we work</h1>
        <img src={HelpOther} alt="helpOtherImage" />
        <h2>Born to help</h2>
        <p>
          Before all else, we’re helpers. We approach each interaction with
          empathy. It’s why we’re always listening to training managers, course
          creators, and learners on how to make their lives simpler and learning
          more fulfilling. It’s why we are kind and patient with each other.
          It’s also why we organize blood drives, donate to beloved causes, and
          adopt stray cats and dogs.
        </p>
        <img src={SolveProblems} alt="SolveProblems" />
        <h2>Solve problems</h2>
        <p>
          We are problem solvers, not product pushers. That’s why we don’t
          over-promise and why we offer unlimited free access with full support,
          so customers see what they get, before they get it. We’re not into the
          whole “14-day free trial” thing, either. Deciding when to buy should
          be your call. And solve your problem.
        </p>
        <img src={AllIn} alt="AllIn" />
        <h2>Go all in</h2>
        <p>
          No opportunity unseized. No challenge unsolved. No ticket unreturned.
          Whether it’s product, development, or support, we go all in. Even our
          breaks are cross-team affairs where you’ll find us brainstorming about
          an upcoming feature, or competing to pick the craziest coffee flavor
          from our favorite place next door.
        </p>
        <img src={Simplicity} alt="Simplicity" />
        <h2>Pursue simplicity</h2>
        <p>
          We’re making learning less busy and more breezy. That means getting
          clutter out of the way and giving learners room to breathe. So instead
          of adding more, we focus on what we can take away. Because when things
          just work, we know our work is done.
        </p>
      </div>
    </div>
  );
};
export default AboutUs;
