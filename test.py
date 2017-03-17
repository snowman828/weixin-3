#!/usr/bin/python
# -*- coding: UTF-8 -*-

import time,datetime;  # 引入time模块

interval_time_s = (datetime.datetime.now() + datetime.timedelta(days = -1)).strftime("%Y-%m-%d 23:59:59");
interval_time_e = (datetime.datetime.now() + datetime.timedelta(days = -60)).strftime("%Y-%m-%d 23:59:59");

print "当前时间戳为:", interval_time_s;
print "当前时间戳为:", interval_time_e;

