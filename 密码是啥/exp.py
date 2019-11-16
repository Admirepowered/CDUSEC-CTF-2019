import hashlib
tmp = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'
for a in tmp:
	for b in tmp:
		for c in tmp:
			for d in tmp:
				for e in tmp:
					tt=a+b+c+d+e
					my_md5 = hashlib.md5()
					my_md5.update(tt.encode())
					test=my_md5.hexdigest()
					if(test[0:4]=='b996'):
						if(test[29:32]=='3e2'):
							print(tt)
							
					
					