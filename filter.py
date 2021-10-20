import numpy as np

def filt(x,b,a):
	v = np.zeros((len(b)))
	w = np.zeros((len(a)))
	y = np.zeros((len(x)))

	for n in range(len(x)):
		
		v[0] = x[n]
		#print(v)
		#print(w)
		y[n] = np.dot((-a),w) + np.dot(b,v)
	
		for i in range(len(v)-1,0,-1):
			v[i] = v[i-1]
			pass	
		for j in range(len(w)-1,0,-1):
			w[j] = w[j-1]
			pass
		w[0] = y[n]
		
		pass

	return(y)
	pass

b = np.array([4,5,6,7])
a = np.array([1,2,3])
x = np.array([1,2,3,4,5,6,7,8,9])
y = filt(x,b,a)
print(y)
