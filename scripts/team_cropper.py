import cv2
import numpy as np
import glob
import os

img_dir = '.'
img_dest = '../'

os.chdir(img_dir)
percent = 0.5
img_list = glob.glob('*.jpg')


for img_file in img_list:
    img = cv2.imread(img_file)
    h, w = img.shape[:2]
    cx, cy = w / 2, h / 2
    cropped = img[0 : h, cx - h / 2 : cx + h / 2]
    resized = cv2.resize(cropped, (0,0), fx = percent, fy = percent )
    try:
        res = cv2.imwrite('{}{}'.format(img_dest, img_file), resized)
    except:
        print('Error in {}'.format(img_file))
