import axios from "axios";

const addCourse = async () => {
  try {
    const result = await axios.post("http://127.0.0.1:8000/addCourse");
    return result;
  } catch (error) {
    return "ERROR";
  }
};

export default addCourse;
