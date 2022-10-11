import axios from "axios";

const assignCourse = async () => {
  try {
    const result = await axios.post("http://127.0.0.1:8000/assignCourse");
    return result;
  } catch (error) {
    return "ERROR";
  }
};

export default assignCourse;
