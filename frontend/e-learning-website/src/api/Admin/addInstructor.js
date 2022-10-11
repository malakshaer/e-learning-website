import axios from "axios";

const addInstructor = async () => {
  try {
    const result = await axios.post("http://127.0.0.1:8000/addInstructor");
    return result;
  } catch (error) {
    return "ERROR";
  }
};

export default addInstructor;
