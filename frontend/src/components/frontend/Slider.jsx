import React, { useState } from "react";
import Arrows from "./Arrows";
import imageSlider from "./imageSlider";
import SliderContent from "./SliderContent";
import "./slider.css";

const len = imageSlider.length - 1;

function Slider(props) {
  const [activeIndex, setActiveIndex] = useState(0);
  return (
    <div className="slider-container flex-grow-1">
      <SliderContent activeIndex={activeIndex} imageSlider={imageSlider} />
      <Arrows
        prevSlide={() =>
          setActiveIndex(activeIndex < 1 ? len : activeIndex - 1)
        }
        nextSlide={() =>
          setActiveIndex(activeIndex === len ? 0 : activeIndex + 1)
        }
      />
    </div>
  );
}

export default Slider;
