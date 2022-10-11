import axios from "axios";

const removeAssignment = async () => {
  try {
    const result = await axios.delete("http://127.0.0.1:8000/removeAssignment");
    return result;
  } catch (error) {
    return "ERROR";
  }
};

export default removeAssignment;
