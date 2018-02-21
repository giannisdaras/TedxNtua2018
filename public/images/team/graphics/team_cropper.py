from multiprocessing import Pool
import cv2
import numpy as np
import glob
import os

img_dir = './'
img_dest = '.'
target_h = 540 # target height

os.chdir(img_dir)
percent = 0.5
img_list = glob.glob('*.jpg')
print img_list

def mutate(img_file):
    img = cv2.imread(img_file)
    h, w = img.shape[:2]
    percent = float(target_h) / h
    cx, cy = w / 2, h / 2
    cropped = img[0 : h, cx - h / 2 : cx + h / 2]
    resized = cv2.resize(cropped, (0,0), fx = percent, fy = percent )
    try:
        res = cv2.imwrite('{}'.format(img_file), resized)
        print('Success in {}'.format(img_file))
    except:
        print('Error in {}'.format(img_file))



pool = Pool(5)
pool.map(mutate, img_list)
