# Object-detection---Plastic
<!-- ABOUT THE PROJECT -->
<div id="top"></div>
## About The Project

The supervised plastic detection model uses customized Yolov5 object detection model that obtains the input from raspberry pi camera and then object detection is processed using a python code which is then directed to a website that displays the output of the captured image.

<p align="right">(<a href="#top">back to top</a>)</p>

<p>DETECTION RESULT : <a href="https://liveplasticdetect.netlify.app/test.html">pick-the-plastic</a></p>
</a>
### Built With

* [Python](https://www.python.org/)
* [Yolov5](https://github.com/ultralytics/yolov5)

<p align="right">(<a href="#top">back to top</a>)</p>


<!-- GETTING STARTED -->
## Getting Started
We need raspberry pi 3 or higher version along the pi OS

### Prerequisites

 how to install them
* Pi OS
  ```sh
  [OS] https://www.raspberrypi.com/software/
  ```
* Google Colaboratory

### Installation

_Below is an example of how you can instruct your audience on installing and setting up your app. This template doesn't rely on any external dependencies or services._

1. clone the repository
  ```sh
  git clone https://github.com/ultralytics/yolov5
  ```
2. Install the requirements
   ```sh
   cd yolov5
   pip install -qr requirements.txt
   ```

<p align="right">(<a href="#top">back to top</a>)</p>


## Procedure
1.  Create a new google colab
2.  Upload the data and labelling data set and unzip it using the following code.
    ```sh
    !zip -r /content/yolov5/train_data.zip /content/yolov5/train_data
    !unzip -q /content/yolov5/train_data.zip -d ../
    ```
   
3.  Replace the custom.yaml file with the coco128.yaml 
4.  Exexute the python script in google colab and place the output of runs folder into the raspberry pi

