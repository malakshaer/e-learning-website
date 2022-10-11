import axios from "axios";

const removeAnnouncement = async () => {
  try {
    const result = await axios.delete(
      "http://127.0.0.1:8000/removeAnnouncement"
    );
    return result;
  } catch (error) {
    return "ERROR";
  }
};

export default removeAnnouncement;
