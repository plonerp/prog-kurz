from abc import abstractmethod


class VypocentniModel:

    @abstractmethod
    def secti(self, a, b):
        pass


class JednoduchyVypocetniModel(VypocentniModel):
    def secti(self, a, b):
        return a + b

    def odecti(self, a, b):
        return a - b


class SlozityVypocetniModel(VypocentniModel):
    def secti(self, a, b):
        return a + b


class Kalkulacka:
    def __init__(self, model: VypocentniModel):
        self.model = model

    def secti(self, a, b):
        return self.model.secti(a, b)

    def odecti(self, a, b):
        return self.model.odecti(a, b)
