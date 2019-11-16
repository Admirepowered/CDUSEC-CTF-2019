import base64
f=open('Base.txt','r')
txt=f.read()
while True:
	try:
		txt=base64.b16decode(txt)
	except Exception as e:
		try:
			txt=base64.b32decode(txt)
		except Exception as e:
			txt=base64.b64decode(txt)
	finally:
		print(txt)
f.close()